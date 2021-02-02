@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                                <h4 class="card-title">Estatuto</h4>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Arquivo</th>
                                    <th scope="col">Data de upload</th>
                                    <th scope="col">Download</th>
                                    <th scope="col">Visualização</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        estatutoftx.pdf
                                    </td>
                                    <td>31/01/2021 10:43</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="/download">
                                                <i class="tim-icons icon-cloud-download-93"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="/view">
                                                <i class="tim-icons icon-video-66"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
