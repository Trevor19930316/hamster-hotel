@extends('backend.template.base')

@section('title', 'Tables')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-6">
                    @component('backend.template.component.base.cards.card')
                        @slot('cardTitle')
                            <i class="fa fa-align-justify"></i> Simple Table
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.component.base.tables.table')
                                @slot('tableThead')
                                    <tr>
                                        <th>Username</th>
                                        <th>Date registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    <tr>
                                        <td>Samppa Nori</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Estavan Lykos</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-danger">Banned</span></td>
                                    </tr>
                                    <tr>
                                        <td>Chetan Mohamed</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td><span class="badge badge-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Derick Maximinus</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Friderik Dávid</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endslot
                            @endcomponent
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        @endslot
                    @endcomponent
                </div>
                <!-- /.col-->
                <div class="col-lg-6">
                    @component('backend.template.component.base.cards.card')
                        @slot('cardTitle')
                            <i class="fa fa-align-justify"></i> Striped Table
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.component.base.tables.table')
                                @slot('tableThead','Striped')
                                @slot('tableThead')
                                    <tr>
                                        <th>Username</th>
                                        <th>Date registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    <tr>
                                        <td>Yiorgos Avraamu</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Avram Tarasios</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-danger">Banned</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quintin Ed</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td><span class="badge badge-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Enéas Kwadwo</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Agapetus Tadeáš</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endslot
                            @endcomponent
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        @endslot
                    @endcomponent
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
                <div class="col-lg-6">
                    @component('backend.template.component.base.cards.card')
                        @slot('cardTitle')
                            <i class="fa fa-align-justify"></i> Condensed Table
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.component.base.tables.table')
                                @slot('tableThead','Condensed')
                                @slot('tableThead')
                                    <tr>
                                        <th>Username</th>
                                        <th>Date registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    <tr>
                                        <td>Yiorgos Avraamu</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Avram Tarasios</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-danger">Banned</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quintin Ed</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td><span class="badge badge-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Enéas Kwadwo</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Agapetus Tadeáš</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endslot
                            @endcomponent
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        @endslot
                    @endcomponent
                </div>
                <!-- /.col-->
                <div class="col-lg-6">
                    @component('backend.template.component.base.cards.card')
                        @slot('cardTitle')
                            <i class="fa fa-align-justify"></i> Bordered Table
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.component.base.tables.table')
                                @slot('tableThead','Bordered')
                                @slot('tableThead')
                                    <tr>
                                        <th>Username</th>
                                        <th>Date registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    <tr>
                                        <td>Yiorgos Avraamu</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Avram Tarasios</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-danger">Banned</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quintin Ed</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td><span class="badge badge-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Enéas Kwadwo</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Agapetus Tadeáš</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endslot
                            @endcomponent
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        @endslot
                    @endcomponent
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
                <div class="col-lg-12">

                    @component('backend.template.component.base.cards.card')
                        @slot('cardTitle')
                            <i class="fa fa-align-justify"></i> Combined All Table
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.component.base.tables.table')
                                @slot('tableThead','Combined')
                                @slot('tableThead')
                                    <tr>
                                        <th>Username</th>
                                        <th>Date registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    <tr>
                                        <td>Yiorgos Avraamu</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Avram Tarasios</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-danger">Banned</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quintin Ed</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td><span class="badge badge-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Enéas Kwadwo</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Agapetus Tadeáš</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endslot
                            @endcomponent
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        @endslot
                    @endcomponent
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>

@endsection
