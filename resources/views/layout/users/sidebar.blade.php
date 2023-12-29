

  <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                           
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Tableau &amp; Enregistrements</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href=" {{ route('stat') }}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Personnels</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{ route('employe') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employé</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    
                                        <li class="">
                                            <a href="{{ route('user') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Utilisateurs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Contrats &amp; Employés</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- Contrat -->
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Contrats
                                        </span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('cdd') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">C.D.D</span>

                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="{{ route('cdi') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">C.D.I</span>
                                                
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('stagiaire') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Stagiaire</span>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- fin contrat -->

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Conges &amp; Salaire</div>
                            <ul class="pcoded-item pcoded-left-item">
                              
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Congés des employés</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('congeEmploye') }}">
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tous les conges</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('congePayer') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Conges payer</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('congeSansSolde') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Conges sans solde</span>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Salaire remis</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="auth-normal-sign-in.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">C.D.D</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="auth-sign-up.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">C.D.I</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="sample-page.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Stagiaire</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                    </nav>

                    <footer>
                        <div class="footer" style="background-color: currentcolor;">
                            <p><em style="margin-left: 300px; text-align: center; color: white">Copyright &copy; 2023</em>  <strong style="color:coral; float: right;">Decouverte de Laravel dans une gestion d'employées</strong></p>
                        </div>
                    </footer>