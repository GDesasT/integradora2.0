<nav class="navbar navbar-expand-lg "  style="background-color: #fff9e3; ">
 
    <div class="container-fluid"style="margin-bottom: -50px;">
        <img src="../img/logo.jpeg"  id="logo">
        <a class="navbar-brand nav-item" style="font-size:25px font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; href="#>Comedor Industrial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('menu') ? 'active' : ''); ?>" href="<?php echo e(route('menu')); ?>">Menu</a>
                </li>
             
        </button>

            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item" id=navlogin>
                    <img src="../img/user.png" ></button>
                    <a class=" <?php echo e(request()->routeIs('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\tania\OneDrive\Desktop\este inte\integradora8.0\integradora2.0\resources\views/layouts/nav.blade.php ENDPATH**/ ?>