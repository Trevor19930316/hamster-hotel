<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();
    private $adminRole = null;
    private $viewerRole = null;
    private $subFolder = '';

    public function join($roles, $menusId)
    {
        $roles = explode(',', $roles);
        foreach ($roles as $role) {
            array_push($this->joinData, array('role_name' => $role, 'menus_id' => $menusId));
        }
    }

    /*
        Function assigns menu elements to roles
        Must by use on end of this seeder
    */
    public function joinAllByTransaction()
    {
        DB::beginTransaction();
        foreach ($this->joinData as $data) {
            DB::table('menu_role')->insert([
                'role_name' => $data['role_name'],
                'menus_id' => $data['menus_id'],
            ]);
        }
        DB::commit();
    }

    public function insertLink($roles, $name, $href, $icon = null)
    {
        $href = $this->subFolder . $href;
        if ($this->dropdown === false) {
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menulist_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        } else {
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menulist_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        /*
        $permission = Permission::where('name', '=', $name)->get();
        if (empty($permission)) {
            $permission = Permission::create(['name' => 'visit ' . $name]);
        }
        $roles = explode(',', $roles);
        if (in_array('user', $roles)) {
            $this->viewerRole->givePermissionTo($permission);
        }
        if (in_array('admin', $roles)) {
            $this->adminRole->givePermissionTo($permission);
        }
        */
        return $lastId;
    }

    public function insertTitle($roles, $name)
    {
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menulist_id' => $this->menuId,
            'sequence' => $this->sequence
        ]);
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function beginDropdown($roles, $name, $icon = '')
    {
        if (count($this->dropdownId)) {
            $parentId = $this->dropdownId[count($this->dropdownId) - 1];
        } else {
            $parentId = null;
        }
        DB::table('menus')->insert([
            'slug' => 'dropdown',
            'name' => $name,
            'icon' => $icon,
            'menulist_id' => $this->menuId,
            'sequence' => $this->sequence,
            'parent_id' => $parentId
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        array_push($this->dropdownId, $lastId);
        $this->dropdown = true;
        $this->sequence++;
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function endDropdown()
    {
        $this->dropdown = false;
        array_pop($this->dropdownId);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Get roles */
        // $this->adminRole = Role::where('name', '=', 'Admin')->first();
        // $this->viewerRole = Role::where('name', '=', 'Viewer')->first();

        $SuperAdminRole = 'Super-Admin,';

        /* Create Sidebar menu */
        DB::table('menulist')->insert([
            'name' => 'sidebar menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId

        $this->insertLink($SuperAdminRole . 'Public,Viewer,Admin', 'Dashboard', '/backend/dashboard', 'cil-speedometer');

        $this->insertLink('Public', 'Login', '/backend/login', 'cil-account-logout');

        $this->insertTitle($SuperAdminRole, 'Components');

        $this->beginDropdown($SuperAdminRole, 'Base', 'cil-puzzle');
        $this->insertLink($SuperAdminRole, 'Breadcrumb', '/backend/components/base/breadcrumb');
        $this->insertLink($SuperAdminRole, 'Cards', '/backend/components/base/cards');
        $this->insertLink($SuperAdminRole, 'Tables', '/backend/components/base/tables');
        $this->insertLink($SuperAdminRole, 'Form', '/backend/components/base/form');
        $this->insertLink($SuperAdminRole, 'Input Group', '/backend/components/base/input-group');
        $this->endDropdown();

        $this->beginDropdown($SuperAdminRole, 'Notifications', 'cil-bell');
        $this->insertLink($SuperAdminRole, 'Alerts', '/backend/components/notifications/alerts');
        $this->insertLink($SuperAdminRole, 'Badges', '/backend/components/notifications/badges');
        $this->insertLink($SuperAdminRole, 'Modals', '/backend/components/notifications/modals');
        $this->endDropdown();

        $this->beginDropdown($SuperAdminRole, 'Element', 'cil-diamond');
        $this->insertLink($SuperAdminRole, 'Input', '/backend/components/element/input');
        $this->insertLink($SuperAdminRole, 'Checkbox', '/backend/components/element/checkbox');
        $this->insertLink($SuperAdminRole, 'Radio', '/backend/components/element/radio');
        $this->insertLink($SuperAdminRole, 'Select', '/backend/components/element/select');
        $this->insertLink($SuperAdminRole, 'Button', '/backend/components/element/button');
        $this->insertLink($SuperAdminRole, 'Textarea', '/backend/components/element/textarea');
        $this->insertLink($SuperAdminRole, 'Icon', '/backend/components/element/icon');
        $this->insertLink($SuperAdminRole, 'Image', '/backend/components/element/image');
        $this->insertLink($SuperAdminRole, 'File', '/backend/components/element/file');
        $this->insertLink($SuperAdminRole, 'Pagination', '/backend/components/element/pagination');
        $this->endDropdown();

        $this->insertTitle($SuperAdminRole, 'Extras');

        $this->beginDropdown($SuperAdminRole, 'Pages', 'cil-star');
        $this->insertLink($SuperAdminRole, 'Login', '/backend/login');
//        $this->insertLink('Viewer,Admin', 'Register', '/register');
//        $this->insertLink('Viewer,Admin', 'Error 404', '/404');
//        $this->insertLink('Viewer,Admin', 'Error 500', '/500');
        $this->endDropdown();

//        $this->insertLink('Admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        $this->insertLink($SuperAdminRole, 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');

        /* Create top menu */
        DB::table('menulist')->insert([
            'name' => 'top menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId

        $this->beginDropdown($SuperAdminRole . 'Admin', '設定');
        $this->insertLink($SuperAdminRole . 'Admin', 'Users', '/backend/settings/users/index');
        $this->endDropdown();

        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
