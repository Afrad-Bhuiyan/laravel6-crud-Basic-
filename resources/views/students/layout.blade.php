<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>@yield('pageTitle') | laravel6 Crud Application</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    @yield('pageStylSheets')
</head>
<body>
    
   
    <main>
        <section>
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <h1 class='text-center'>Laravel 6 CRUD Application</h1>
                    </div>
                </div>

                @yield('mainContent')
            </div>
        </section>
    </main>



</body>
</html>