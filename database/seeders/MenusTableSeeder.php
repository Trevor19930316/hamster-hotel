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
                'menu_list_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        } else {
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_list_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
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
        return $lastId;
    }

    public function insertTitle($roles, $name)
    {
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menu_list_id' => $this->menuId,
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
            'menu_list_id' => $this->menuId,
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
        $this->adminRole = Role::where('name', '=', 'Admin')->first();
        $this->viewerRole = Role::where('name', '=', 'Viewer')->first();

        /* Create Sidebar menu */
        DB::table('menu_list')->insert([
            'name' => 'sidebar menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId

        $this->insertLink('Public,Viewer,Admin', 'Dashboard', '/backend/dashboard', 'cil-speedometer');
        $this->beginDropdown('Admin', 'Settings', 'cil-calculator');
//        $this->insertLink('Admin', 'Notes', '/notes');
        $this->insertLink('Admin', 'Users', '/users');
//        $this->insertLink('Admin', 'Edit menu', '/menu/menu');
//        $this->insertLink('Admin', 'Edit menu elements', '/menu/element');
//        $this->insertLink('Admin', 'Edit roles', '/roles');
//        $this->insertLink('Admin', 'Media', '/media');
//        $this->insertLink('Admin', 'BREAD', '/bread');
//        $this->insertLink('Admin', 'Email', '/mail');
        $this->endDropdown();

        $this->insertLink('Public', 'Login', '/backend/login', 'cil-account-logout');
//        $this->insertLink('Public', 'Register', '/register', 'cil-account-logout');

//        $this->insertTitle('Viewer,Admin', 'Theme');
//        $this->insertLink('Viewer,Admin', 'Colors', '/colors', 'cil-drop1');
//        $this->insertLink('Viewer,Admin', 'Typography', '/typography', 'cil-pencil');

//        $this->beginDropdown('Viewer,Admin', 'Base', 'cil-puzzle');
//        $this->insertLink('Viewer,Admin', 'Breadcrumb', '/base/breadcrumb');
//        $this->insertLink('Viewer,Admin', 'Cards', '/base/cards');
//        $this->insertLink('Viewer,Admin', 'Carousel', '/base/carousel');
//        $this->insertLink('Viewer,Admin', 'Collapse', '/base/collapse');
//        $this->insertLink('Viewer,Admin', 'Forms', '/base/forms');
//        $this->insertLink('Viewer,Admin', 'Jumbotron', '/base/jumbotron');
//        $this->insertLink('Viewer,Admin', 'List group', '/base/list-group');
//        $this->insertLink('Viewer,Admin', 'Navs', '/base/navs');
//        $this->insertLink('Viewer,Admin', 'Pagination', '/base/pagination');
//        $this->insertLink('Viewer,Admin', 'Popovers', '/base/popovers');
//        $this->insertLink('Viewer,Admin', 'Progress', '/base/progress');
//        $this->insertLink('Viewer,Admin', 'Scrollspy', '/base/scrollspy');
//        $this->insertLink('Viewer,Admin', 'Switches', '/base/switches');
//        $this->insertLink('Viewer,Admin', 'Tables', '/base/tables');
//        $this->insertLink('Viewer,Admin', 'Tabs', '/base/tabs');
//        $this->insertLink('Viewer,Admin', 'Tooltips', '/base/tooltips');
//        $this->endDropdown();

//        $this->beginDropdown('Viewer,Admin', 'Buttons', 'cil-cursor');
//        $this->insertLink('Viewer,Admin', 'Buttons', '/buttons/buttons');
//        $this->insertLink('Viewer,Admin', 'Buttons Group', '/buttons/button-group');
//        $this->insertLink('Viewer,Admin', 'Dropdowns', '/buttons/dropdowns');
//        $this->insertLink('Viewer,Admin', 'Brand Buttons', '/buttons/brand-buttons');
//        $this->endDropdown();

//        $this->insertLink('Viewer,Admin', 'Charts', '/charts', 'cil-chart-pie');
//        $this->beginDropdown('Viewer,Admin', 'Icons', 'cil-star');
//        $this->insertLink('Viewer,Admin', 'CoreUI Icons', '/icon/coreui-icons');
//        $this->insertLink('Viewer,Admin', 'Flags', '/icon/flags');
//        $this->insertLink('Viewer,Admin', 'Brands', '/icon/brands');
//        $this->endDropdown();

//        $this->beginDropdown('Viewer,Admin', 'Notifications', 'cil-bell');
//        $this->insertLink('Viewer,Admin', 'Alerts', '/notifications/alerts');
//        $this->insertLink('Viewer,Admin', 'Badge', '/notifications/badge');
//        $this->insertLink('Viewer,Admin', 'Modals', '/notifications/modals');
//        $this->endDropdown();

//        $this->insertLink('Viewer,Admin', 'Widgets', '/widgets', 'cil-calculator');

        $this->insertTitle('Admin', 'Components');

        $this->beginDropdown('Admin', 'Base', 'cil-puzzle');
        $this->insertLink('Admin', 'Breadcrumb', '/backend/components/base/breadcrumb');
        $this->insertLink('Admin', 'Cards', '/backend/components/base/cards');
        $this->insertLink('Admin', 'Tables', '/backend/components/base/tables');
        $this->endDropdown();

        $this->beginDropdown('Admin', 'Notifications', 'cil-bell');
        $this->insertLink('Admin', 'Alerts', '/backend/components/notifications/alerts');
        $this->insertLink('Admin', 'Badges', '/backend/components/notifications/badges');
        $this->insertLink('Admin', 'Modals', '/backend/components/notifications/modals');
        $this->endDropdown();

        $this->beginDropdown('Admin', 'Element', 'cil-diamond');
        $this->insertLink('Admin', 'Input', '/backend/components/element/input');
        $this->insertLink('Admin', 'Checkbox', '/backend/components/element/checkbox');
        $this->insertLink('Admin', 'Radio', '/backend/components/element/radio');
        $this->insertLink('Admin', 'Select', '/backend/components/element/select');
        $this->insertLink('Admin', 'Button', '/backend/components/element/button');
        $this->insertLink('Admin', 'Textarea', '/backend/components/element/textarea');
        $this->insertLink('Admin', 'Image', '/backend/components/element/image');
        $this->insertLink('Admin', 'File', '/backend/components/element/file');
        $this->insertLink('Admin', 'Pagination', '/backend/components/element/pagination');
        $this->endDropdown();

        $this->insertTitle('Admin', 'Extras');

        $this->beginDropdown('Admin', 'Pages', 'cil-star');
        $this->insertLink('Admin', 'Login', '/backend/login');
//        $this->insertLink('Viewer,Admin', 'Register', '/register');
//        $this->insertLink('Viewer,Admin', 'Error 404', '/404');
//        $this->insertLink('Viewer,Admin', 'Error 500', '/500');
        $this->endDropdown();

//        $this->insertLink('Admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        $this->insertLink('Admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');

        /* Create top menu */
        DB::table('menu_list')->insert([
            'name' => 'top menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId

        $this->beginDropdown('Public,Viewer,Admin', 'Pages');
        $id = $this->insertLink('Public,Viewer,Admin', 'Dashboard', '/backend/dashboard');
//        $id = $this->insertLink('Viewer,Admin', 'Notes', '/notes');
        $id = $this->insertLink('Admin', 'Users', '/backend/users');
        $this->endDropdown();

//        $id = $this->beginDropdown('Admin', 'Settings');
//        $id = $this->insertLink('Admin', 'Edit menu', '/menu/menu');
//        $id = $this->insertLink('Admin', 'Edit menu elements', '/menu/element');
//        $id = $this->insertLink('Admin', 'Edit roles', '/roles');
//        $id = $this->insertLink('Admin', 'Media', '/media');
//        $id = $this->insertLink('Admin', 'BREAD', '/bread');
//        $this->endDropdown();

        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
