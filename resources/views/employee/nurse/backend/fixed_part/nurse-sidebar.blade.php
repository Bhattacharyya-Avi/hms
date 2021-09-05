<nav id="sidebar" class="sidebar js-sidebar"> <!-- navbar starts -->
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{url('/')}}">
			<span class="sidebar-brand-text align-middle">
				LifeSupport
			</span>
			<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
				stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
				<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
				<path d="M20 12L12 16L4 12"></path>
				<path d="M20 16L12 20L4 16"></path>
			</svg>
		</a>

		<div class="sidebar-user">
			<div class="d-flex justify-content-center">
				<div class="flex-shrink-0">
					<!-- <img src="https://demo.adminkit.io/img/avatars/avatar-5.jpg" class="avatar img-fluid rounded me-1" alt="User's image" />
				 -->
				 <img src="{{url('/images/nurse-profile.png')}}" class="avatar img-fluid rounded me-1" alt="User's image" />
				</div>
				<div class="flex-grow-1 ps-2">
					<a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
						Nurse's Name
					</a>
					<div class="dropdown-menu dropdown-menu-start">
						<a class="dropdown-item" href="{{route('nurse.profile')}}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
						<!-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
						<div class="dropdown-divider"></div>-->
						<!-- <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
							Privacy</a>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a> -->
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{route('nurse.logout')}}">Log out</a>
					</div>
				</div>
			</div>
		</div>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('nurse.dashboard')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('nurse.profile')}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('nurse.otlist')}}">
					<i class="align-middle" data-feather="list"></i><span class="align-middle">OT list</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('nurse.bedinfo')}}">
					<i class="align-middle" data-feather="list"></i><span class="align-middle">Bed information</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a href="#ot" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="users"></i> <span class="align-middle">Admit</span>
				</a>
				<ul id="ot" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="{{route('nurse.admit')}}">Admit a patient</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="{{route('nurse.admited_patient_list')}}">Admited patients</a></li>

				</ul>
			</li>

			<!--
			<li class="sidebar-item">
				<a class="sidebar-link" href="calendar.html">
					<i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
				</a>
				<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password </a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page </a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page </a></li>
				</ul>
			</li> -->

			<!-- <li class="sidebar-header">
				Components
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
				</a>
				<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
					<span class="sidebar-badge badge bg-light">1.500+</span>
				</a>
				<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
				</a>
				<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="tables-bootstrap.html">
					<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
				</a>
			</li>

			<li class="sidebar-header">
				Plugins & Addons
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Form Plugins</span>
				</a>
				<ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-inputs.html">Advanced Inputs <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="list"></i> <span class="align-middle">DataTables</span>
				</a>
				<ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.html">Responsive Table <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.html">Table with Buttons <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-column-search.html">Column Search <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-fixed-header.html">Fixed Header <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-multi.html">Multi Selection <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-ajax.html">Ajax Sourced Data <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
				</a>
				<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="notifications.html">
					<i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>
					<span class="sidebar-badge badge bg-primary">Pro</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
				</a>
				<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Multi Level</span>
				</a>
				<ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
					<li class="sidebar-item">
						<a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed">Two Levels</a>
						<ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">Item 1</a>
								<a class="sidebar-link" href="#">Item 2</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link collapsed">Three Levels</a>
						<ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
							<li class="sidebar-item">
								<a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Item 1</a>
								<ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
									<li class="sidebar-item">
										<a class="sidebar-link" href="#">Item 1</a>
										<a class="sidebar-link" href="#">Item 2</a>
									</li>
								</ul>
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">Item 2</a>
							</li>
						</ul>
					</li>
				</ul>
			</li> -->
		</ul>
	</div>
</nav>
