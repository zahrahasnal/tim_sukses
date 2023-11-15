<div id="notification-container" class="notification-container">
    @if(session('success'))
        <div class="notification alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>