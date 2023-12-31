<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Confirmer les codes</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/icone.png">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="<?php echo base_url(); ?>assets/img/icone.png" style="width: 40px;">
                    <div class="sidebar-brand-text mx-3"><span>e-Sakafo</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('backoffice/indexback'); ?>"><span>Accueil</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('backoffice/insert_menu'); ?>"><span>Inserer un nouveau menu</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('backoffice/insert_regime'); ?>"><span>Inserer un nouveau regime</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('backoffice/insert_sport'); ?>"><span>Inserer un nouveau sport</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo site_url('backoffice/codes'); ?>"><span>Confirmer les codes</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="<?php echo base_url(); ?>assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Codes</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Toutes les demandes de code</p>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Montant</th>
                                            <th>Confirmer</th>
                                            <th>Annuler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                            <td>Chief Executive Officer(CEO)</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar3.jpeg">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar4.jpeg">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar5.jpeg">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar1.jpeg">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar2.jpeg">Bruno Nash<br></td>
                                            <td>Software Engineer</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar3.jpeg">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar4.jpeg">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url(); ?>assets/img/avatars/avatar5.jpeg">Cedric Kelly</td>
                                            <td>Senior JavaScript Developer</td>
                                            <td><button class="btn btn-success" type="button" style="color:white;">Confirmer</button></td>
                                            <td><button class="btn btn-danger" type="button">Annuler</button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Nom</strong></td>
                                            <td><strong>Montant</strong></td>
                                            <td><strong>Confirmer</strong></td>
                                            <td><strong>Supprimer</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © e-Sakafo 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>