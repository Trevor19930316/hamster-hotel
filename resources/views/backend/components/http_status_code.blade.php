<?php
$http_status_code_title = $http_status_code_title ?? null;
$http_status_code_subtitle = $http_status_code_subtitle ?? null;
$http_status_code_content = $http_status_code_content ?? null;
$isBackDashboard = $isBackDashboard ?? true;
?>
<div class="container-fluid bg-dark">
    <div class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="text-center text-white">
                <div class="col-sm-12 http-status-code-title">
                    {{$http_status_code_title}}
                </div>
                <div class="col-sm-12 mb-4 http-status-code-subtitle">
                    {{$http_status_code_subtitle}}
                </div>
                <div class="col-sm-12 http-status-code-content">
                    {{$http_status_code_content}}
                </div>
                @if($isBackDashboard)
                    <div class="col-sm-12 http-status-code-content">
                        <a href="{{route('backend.dashboard')}}" class="btn btn-outline-light btn-lg mt-4">
                            <i class="fas fa-chevron-left"></i>
                            回首頁
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
