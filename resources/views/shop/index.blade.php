@extends('layout.master')
@section('title')
laravel shopping-chart
@endsection
@section('content')
<div class="container">

<div class="row " style="margin-bottom:90px; margin-top:80px;">


<div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="https://dsw.scene7.com/is/image/DSWShoes/417337_125_ss_01?$colpg$" alt=""   class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
        <div class=" col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI5PgHoqseRpAPw0wYEQFE6rqSk7kBE2ReQt4sP97f3FDROGIx" alt=""   class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
        <div class=" col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="data:image/jpeg;base64,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" alt=""   class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
        </div>
        <div class="row" style="margin-bottom:100px;">

<div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="https://dsw.scene7.com/is/image/DSWShoes/417337_125_ss_01?$colpg$" alt=""   class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
        <div class=" col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXpB6yXh4492o0J4aGx2Hf1Q_88Jsy8VeCh1bTUzewKki0R1qQ" alt=""   class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
        <div class=" col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ4B0TxkiWsbW0ysl7p2vbyx165cf2TQNeft39xYzJZYNkK_byVw" alt="" class="img-responsive">
              <div class="caption">
                <h4>Product type</h4>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <div class="clearfix">
                <div class="float-left price">$15</div>
                
                <p<a href="#" class="btn btn-danger btn-sm float-right" role="button" style=" height:40px; width:90px;">Add to Cart</a></p>
            </div>
            </div>
          </div>
        </div>
</div>
        @endsection