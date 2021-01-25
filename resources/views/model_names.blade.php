@extends('layouts.layout')

@section('content')
  
  <!-- since we loop through the object $pizzas, the output @model is a single record -->
  <div class="model__container">
    @foreach( $models as $model)
      {{ $model-> model_name }} - {{ $model-> groupset }}
    @endforeach
  </div>
  <footer class="footer">
            <div class="">
                <div class="">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Company</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Contact us</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Careers</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Privacy Policy</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <p class="footer__copyright">
                        Built by <a href="#" class="footer__link">Rad Julongbayan</a> for his project <a href="#" class="footer__link">Laravel</a>&nbsp;<a href="#" class="footer__link">PHP</a>&nbsp;<a href="#" class="footer__link">SQL</a>. Copyright © by <a href="#" class="footer__link">BIKE SEARCH</a>
                    </p>
                </div>
            </div>
        </footer>
@endsection