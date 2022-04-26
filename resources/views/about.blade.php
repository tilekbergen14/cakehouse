@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="banner header-text">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                            src="images/konditerskaya/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                            src="images/konditerskaya/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                            src="images/konditerskaya/slider3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="about-p ">
            <h2 class="card-title">Біз туралы</h2>
            <p> TOO TapTatti Retail (140140015247) кондитер желісі клиенттерге дәмі тіл үйірер торттар, ауызға салса еритін
                тәттілер мен керемет тоқаштар ұсынады. Олардың бәрін тек табиғи әрі балғын заттардан, ешқандай дәм
                күшейткішсіз, алмастырғышсыз жасаймыз. Өнімдерімізді жоғары сапалы, барлық стандарт пен талапқа сай
                пісіреміз.

                Қазір Нұр-Сұлтанда екі цехіміз бен 18 дүкеніміз, Алматыда бір дүкеніміз бар. Олардың барлығына жаңа
                технологиялар мен заманауи құрылғылар енгізілген. Алдағы уақытта басқа қалаларда да филиал ашуды жоспарлап
                отырмыз.

                Біз өнімдеріміздің жоғары сапасымен танылуы үшін және барлық стандарттар мен талаптарға сай болуы үшін жұмыс
                атқарудамыз. Барлық өнім дәм күшейткіштер мен қоспаларды алмастырғыштарсыз, тек табиғи қоспалардан ғана
                тұрады.

                Отбасы, ұжым және достарыңызбен бірге өтетін барлық мереке-тойыңызға тәтті мен пісірме алам десеңіз, бізге
                келіңіз, қуана-қуана тапсырыс аламыз!

                Біздің кондитерлік компания 2008 жылы құрылып, 2009 жылы өз өнімдерімізді пісіріп, сатумен айналыса бастады.
                Әуелгіде бізде тек 6 адам ғана жұмыс істеген еді. Қазір болса 300-ден асып кетті. Тобымызда көпжылдық
                тәжірибесі бар кәсіби кондитерлер мен көптеген жас мамандар қызмет атқарады. </p>
        </div>
    </div>
@endsection
