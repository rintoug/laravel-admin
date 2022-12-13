@extends('laravel-admin::admin/layout-admin')
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Tables 1</strong><span class="small ms-1">Basic example</span></div>
        <div class="card-body">
            <p class="text-medium-emphasis small">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap.</p>
            <div class="example">
                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-557">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-pencil"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-pencil"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@fat</td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-pencil"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="icon icon-2xl cil-trash"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
