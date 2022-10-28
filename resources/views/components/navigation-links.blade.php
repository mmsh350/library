<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
	<ul>			
        <li class="menu-item-has-children current-menu-item">
			<a href="dashboard">Dashboard</a>
		</li>
		<li>
        @if (auth()->user()->role == 'admin')
		<li  class="menu-item-has-children"><a href="users">Users</a></li>
		<li><a href="books">Books</a></li>		
        @endif	 
		<li><a href="settings">Profile settings</a></li>
		
		
		<li>
		<a href="#"  id="logout"  onclick="logout();">  Logout </a>
         <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
		</li>
	</ul>
</div>