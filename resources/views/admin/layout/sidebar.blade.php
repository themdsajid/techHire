<?php 
$users = auth()->user();  
?>
<ul class="nav">
<?php 
if ($users->role == 'admin') 
{
?>
  <li class="nav-item nav-category">View Company</li>
  <li class="nav-item">
    <a href="{{ route('admin.add_company')}}" class="nav-link">
      <i class="link-icon" data-feather="message-square"></i>
      <span class="link-title">View Company</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('admin.userview')}}" class="nav-link">
      <i class="link-icon" data-feather="user"></i>
      <span class="link-title">View User</span>
    </a>
  </li>
<?php
}
else {
?>
  <li class="nav-item">
    <a href="{{ route('user.userview')}}" class="nav-link">
      <i class="link-icon" data-feather="user"></i>
      <span class="link-title">User</span>
    </a>
  </li>
<?php
}
?>
</ul>
