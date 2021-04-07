<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * 角色未驗證的異常處理
     *
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        $guard = $exception->guards()[0];

        $routeName = 'backend.loginPage';

//        if ($guard == 'web') {
//
//        }

        return redirect()->guest(route($routeName));
    }

    /**
     * 頁面轉導處理
     *
     * @param \Illuminate\Http\Request $request
     * @param Throwable $e
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($this->isHttpException($e)) {
            $httpStatusCode = $e->getStatusCode();
            switch ($httpStatusCode) {
                case 403:
                    return response()->view('backend.http_status_code.403', [], $httpStatusCode);
                    break;
                case 404:
                    return response()->view('backend.http_status_code.404', [], $httpStatusCode);
                    break;
                case 419:
                    return response()->view('backend.http_status_code.419', [], $httpStatusCode);
                    break;
                case 422:
                    return response()->view('backend.http_status_code.422', [], $httpStatusCode);
                    break;
                case 500:
                    return response()->view('backend.http_status_code.500', [], $httpStatusCode);
                    break;
            }
        }

        return parent::render($request, $e);
    }
}
