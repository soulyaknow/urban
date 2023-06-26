<x-layout2>
<div class="header-container">
	<header id="main-header">
		<h1 id="h1">Urban Coutures</h1>
	</header>
</div>
<!-- End of header-container -->
<section class="dashboard-container">
	<div class="dashboard-content">
		<div class="left-side-content">
			<div class="admin-profile">
				<img src="images/user-photo.jpg" alt="Administrator Profile" width="48" height="48">
				<div class="admin-info">
					<p>Administrator</p>
				</div>
			</div>
			<div class="navbuttons nav nav-pills mt-3">
				<div class="nav-item w-100">
					<ul>
						<li><button type="button" class="nav-link active w-100 py-3" data-bs-target="#dashboardpane" data-bs-toggle="pill"><i class="home fa-solid fa-shop pe-3"></i>Dashboard</button></li>
						<li><button type="button" class="nav-link w-100 py-3" data-bs-target="#addproductpane" data-bs-toggle="pill"><i class="fa-solid fa-plus pe-3"></i><a href="/admin/product" style="text-decoration: none">Add products</a></button></li>
						<li>
							<form action="/urban/logout" method="POST">
								@csrf
								<button type="submit" class="logoutAdmin nav-link w-100 py-3"><i class="fa-solid fa-right-from-bracket pe-3"></i>Logout</button>
							</form>
						</li>
					</ul>
				</div><!-- End of selection contents -->
			</div>
		</div>
		<!-- End of left-side-content -->
		<div class="right-side-content">
			<x-flash-message/>
			<div class="tab-content">
				<div class="tab-pane show active" tabindex="0" id="dashboardpane">
					<div class="main-dashboard">
						<div class="logo">
							<!-- <img src="../images/user-photo.jpg" alt="Couture Logo" width="30" height="30"> -->
							<p><i class="home fa-solid fa-shop text-primary"></i>Dashboard</p>
						</div>
						<div class="box-container">
							<div class="box-1">
								<div class="box-content">
									<i class="fa-solid fa-user-plus"></i>
									<small>Total Users</small>
									<p class="totalallUsers">{{count($users)}}</p>
									<p></p>
								</div>
							</div>
							<div class="box-2">
								<div class="box-content">
									<i class="fa-solid fa-cart-shopping"></i>
									<small>Total Purchased</small>
									<p>115 000 000+</p>
									<p>Increase by 30%</p>
								</div>
							</div>
							<div class="box-3">
								<div class="box-content">
									<i class="fa-solid fa-user-minus"></i>
									<small>Blocked Users</small>
									<p>300 000+</p>
									<p>Increase by 80%</p>
								</div>
							</div>
						</div>
						<div class="data-table">
							<!-- <h3>Urban Coutures</h3> -->
						</div>
					</div>
					<div class="table-container">
						<table id="dashboard-table">
							<span>Recently Registered Users</span>
							<thead>
								<tr style="text-align: center">
									<th>Fullname</th>
									<th>Age</th>
									<th>Gender</th>
									<th>Email Address</th>
									<th>Date Registered</th>
								</tr>
							</thead>
							<tbody id="admintablebody">
								@foreach($users as $user)
								<tr>
									<td>{{$user->firstname . " " . $user->lastname}}</td>
									<td>{{$user->age}}</td>
									<td>{{$user->gender}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->created_at}}</td>
									{{-- <td><button class="active"><a href="/admin/{{$user->id}}/edit" style="text-decoration: none; color:white">Edit</a></button><button class="blocked">Delete</button></td> --}}
								</tr>
								@endforeach
							</tbody>
						</table>
						<!-- End of table -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</x-layout2>