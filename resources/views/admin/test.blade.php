<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="{{ asset('css/admin-style/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="nav show-menu" id="nav">
        <nav class="nav__content">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-chevron-left'></i>
            </div>

            <a href="#" class="nav__logo">
                <i class='bx bxs-heart'></i>
                <span class="nav__logo-name">Healthy</span>
            </a>

            <div class="nav__list">
                <a href="#" class="nav__link active-link">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-file'></i>
                    <span class="nav__name">Appointments</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-envelope'></i>
                    <span class="nav__name">Messages</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="nav__name">Statistic</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-cog'></i>
                    <span class="nav__name">Settings</span>
                </a>
            </div>
        </nav>
    </div>

    <!--=============== MAIN ===============-->
    <main class="container-fluid section ">
        <div id="main">
            <h1>Components</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deserunt ducimus facere praesentium
                quisquam, vel. Ad autem commodi doloremque nisi obcaecati porro, sequi. Adipisci aliquid aperiam
                asperiores consequuntur dolorem ducimus eaque eos ex facere laborum libero maiores minima natus nemo
                perferendis, porro quasi quod repellat repellendus vero. Deleniti, neque, reprehenderit!</p>
        </div>
    </main>


    <script src="{{ asset('js/admin-script/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
