@php
    if (1){ //
        $linksLeft = [
            ['link' => route('home'), 'title' => 'Painel de instrumentos'],
            [
                'Cadastros',
                [

                ]
            ],
        ];

        $linksRight = [
                [
                    \Illuminate\Support\Facades\Auth::user()->name,
                    ['link' => route('login') , 'title' => 'Login'],
                    ['link' => route('register') , 'title' => 'Registrar'],
                    [['link' => route('logout'), 'title' => 'Logout']]
                ]
            ];
    } else {
        $linksLeft = [];
        $linksRight = [];
    }

    $navLinksLeft = Navigation::links($linksLeft);
    $navLinksRight = Navigation::links($linksRight)->right();

    echo Navbar::withBrand(config('app.name', 'Cartolinha'), route('home'))
    ->fluid()
    ->withContent($navLinksLeft)
    ->withContent($navLinksRight);
@endphp