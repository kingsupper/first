<x-Layout>
    <x-slot:title>
       welcome home
    </x-slot:title>
    <h3>welcome to home page</h3>
    <div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Section Of The </span> Site</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-6 text-center">
					    <div class="single-product-item">
						    <div class="product-image">
							<a href="/product">
                                <img src="{{url($item -> imagepath)}}" style="max-height: 200px; " alt=""></a>
						    </div>
						    <h3>{{$item -> name }}</h3>
                            <h3>{{$item -> description }}</h3>
					    </div>
			        </div>
                @endforeach

			</div>
		</div>
	</div>
</x-Layout>
