@extends('layouts.app')

@section('customs-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/share.css') }}"/>
@endsection

@section('content')

    <div class="pagetitle">
        <h1>Classes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
                <li class="breadcrumb-item">Importations</li>
                <li class="breadcrumb-item active">Classes</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div id="loading-container" class="loading-container">
                    <div id="page-loader" class="spinner-grow" style="width: 11em; height: 11em;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div id="loading-has-failed" class="center flex-column visually-hidden">
                        <img width="200" height="200" src="{{asset('assets/images/error.png')}}" alt=""/>
                        <h6 class="text-danger text-italic">Une erreur s'est produite lors du chargement des données ! Veuillez réessayer</h6>
                        <button class="btn btn-primary">Réessayer</button>
                    </div>
                </div>

                <div class="card visually-hidden" id="summary-container">
                    <div id="has-not-data" class="card-body center flex-column" style="height: 80vh;">
                        <h6 class="text-italic">Aucune donnée n'a été importée pour l'instant</h6>
                        <img width="200" height="200" src="{{asset('assets/images/cloud-computing.png')}}" alt=""/>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary" onclick="showImportContainer()">Nouvelle importation</button>
                        </div>
                    </div>
                    <div id="has-data" class="card-body center flex-column" style="height: 80vh;">
                        <h6 class="text-italic">Des données ont déjà été importées</h6>
                        <img width="200" height="200" src="{{asset('assets/images/import.png')}}" alt=""/>
                        <div class="mt-3">
                            <button class="btn btn-outline-info mr-1" onclick="showStoredDataContainer()">Consulter la liste</button>
                            <button class="btn btn-outline-primary" onclick="showImportContainer()">Nouvelle importation</button>
                        </div>
                    </div>
                </div>

                <div class="card" id="stored-data-container">
                    <div class="card-body">
                        <h5 class="card-title" style="position: relative;">
                            <button onclick="showSummaryContainer()" style="position: absolute; right: 0;" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-arrow-left-square"></i>
                            </button>
                            Classes importées
                        </h5>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Intitulé</th>
                                        <th scope="col">Filière</th>
                                        <th scope="col">Niveau</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="stored-classes-result">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="import-container" class="visually-hidden">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="position: relative;">
                                <button onclick="showSummaryContainer()" style="position: absolute; right: 0;" class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-arrow-left-square"></i>
                                </button>
                                Importation
                            </h5>

                            <!-- Bordered Tabs Justified -->
                            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 active" id="import-by-file-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Ajouter par fichier Excel</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="import-by-form-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ajouter par formulaire</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                <div class="tab-pane fade mt-3 show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="import-by-file-tab">
                                    <div class="row d-flex flex-column justify-content-center align-items-center">
                                        <div style="width: 450px">
                                            <div class="row mb-3">
                                                <label for="code" class="col-sm-3 col-form-label">Délimiteur: </label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Point-virgule (;)</option>
                                                        <option value="2">Virgule (;)</option>
                                                        <option value="3">Tabulation (  )</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="drag-area" id="drag-area">
                                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                            <h5 class="drag-header" id="drag-header-text">Glissez et déposez votre fichier ici</h5>
                                            <span>OU</span>
                                            <button class="btn btn-success browse-button" id="browse-button">Pacourez vos fichiers</button>
                                            <input class="upload-input" id="upload-input" type="file" hidden>
                                        </div>
                                        <div class="text-md-center mt-3" id="imported-file-name" style="display: none;">
                                            <h6 id="file-name"></h6>
                                        </div>
                                        <div class="progress-cont mt-1" id="progress-component" style="display: none;">
                                            <div class="progress bg-info" id="progress" style="width: 80px"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mt-3" id="bordered-justified-profile" role="tabpanel" aria-labelledby="import-by-form-tab">
                                    <form onsubmit="return false" class="row d-flex justify-content-center needs-validation" id="classe-form" novalidate>
                                        <div class="col-md-7">
                                            <div class="row mb-3">
                                                <label for="code" class="col-sm-2 col-form-label">Code: <span class="text-danger ql-size-huge">*</span></label>
                                                <div class="col-sm-10">
                                                    <input required minlength="2" maxlength="15" id="code" name="code" type="text" class="form-control" placeholder="Code de la classe">
                                                    <div class="invalid-feedback">
                                                        Le code est requis et doit comprendre entre 2 et 15 caractères !
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="code" class="col-sm-2 col-form-label">Intitulé: <span class="text-danger ql-size-huge">*</span></label>
                                                <div class="col-sm-10">
                                                    <input required minlength="3" maxlength="60" id="intitule" name="intitule" type="text" class="form-control" placeholder="Intitulé de la classe">
                                                    <div class="invalid-feedback">
                                                        L'intitulé est requis et doit comprendre entre 3 et 60 caractères !
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="code" class="col-sm-2 col-form-label">Filière: <span class="text-danger ql-size-huge">*</span></label>
                                                <div class="col-sm-10">
                                                    <select id="code_filiere" name="code_filiere" class="form-select" required>
                                                        <option selected="">De quelle filière est la classe ?</option>
                                                        @foreach($filieres as $filiere)
                                                            <option value="{{$filiere->code}}">{{$filiere->code}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        La filière est requise !
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="code" class="col-sm-2 col-form-label">Niveau: <span class="text-danger ql-size-huge">*</span></label>
                                                <div class="col-sm-10">
                                                    <select id="code_niveau" name="code_niveau" class="form-select" required>
                                                        <option selected="">De quel niveau est la classe ?</option>
                                                        @foreach($niveaux as $niveau)
                                                            <option value="{{$niveau->code}}">{{$niveau->code}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Le niveau est requise !
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button onclick="submitClasseForm()" type="submit" class="btn btn-outline-primary">Ajouter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Bordered Tabs Justified -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Résultat</h5>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Intitulé</th>
                                            <th scope="col">Filière</th>
                                            <th scope="col">Niveau</th>
                                            <th scope="col">Retirer</th>
                                        </tr>
                                        </thead>
                                        <tbody id="classes-result">

                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button disabled id="import-button" onclick="onImport()" class="btn btn-primary" type="button">Importer</button>
                                    <button id="import-loader" class="btn btn-primary visually-hidden" type="button" disabled="">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Veuillez patienter...
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('customs-scripts')
    <script src="{{ asset('assets/js/share.js') }}"></script>
    <script src="{{ asset('assets/js/importations/classes.js') }}"></script>
    <script>
        console.log({!! json_encode($filieres) !!});
        console.log({!! json_encode($niveaux) !!});
        console.log({!! json_encode($classes) !!});
        makeFirstInitialisation({!! json_encode($classes) !!});
    </script>
@endsection
