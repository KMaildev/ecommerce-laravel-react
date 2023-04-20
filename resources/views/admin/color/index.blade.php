@extends('admin.layout.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Color
                        </h5>

                        <div class="card-title-elements ms-auto">
                            <a href="{{ route('color.create') }}" class="dt-button create-new btn btn-primary btn-sm">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table">
                        <thead class="tbbg">
                            <tr>
                                <th class="tbbg" style="text-align: center; width: 1%;">#</th>
                                <th class="tbbg" style="text-align: center;">Title</th>
                                <th class="tbbg" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($categories as $key => $value)
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->name }}
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-xs dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('color.edit', $value->id) }}"
                                                        role="menuitem">
                                                        <i class="icon md-edit" aria-hidden="true"></i>
                                                        Edit
                                                    </a>
                                                </li>

                                                <li>
                                                    <form action="{{ route('color.destroy', $value->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="dropdown-item del_confirm"
                                                            id="confirm-text" data-toggle="tooltip">
                                                            <i class="icon md-delete" aria-hidden="true"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
