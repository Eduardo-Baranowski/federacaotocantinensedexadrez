@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="card-title">Estatuto</h4>
                            </div>
                        </div>
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
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        estatutoftx.pdf
                                    </td>
                                    <td>31/01/2021 10:43</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="/download">
                                                <i class="tim-icons icon-cloud-download-93"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
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
