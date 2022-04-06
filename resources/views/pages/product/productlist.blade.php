 @extends('master') 
@section('content')
            


            
<!doctype html>
<html lang="en">
<head>
<title>product list</title>
<meta charset="UFT-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
 <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/table-03/css/A.style.css.pagespeed.cf.PlwJDa5bmm.css"> 
 <script nonce="963b98f8-d94f-4971-808f-5c66466c6050">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head> 
<body>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">product table</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h4 class="text-center mb-4">skin care product</h4>
<div class="table-wrap">
<table class="table">
<thead class="thead-primary">
<tr>
    
<th>product_name</th>
<th>product_details</th>
<th>Image</th>
<th>action</th>
</tr>
</thead>
<tbody>
@foreach($product as $data)
                                <tr>
                                    <td>{{$data->product_name}}</td>
                                    <td>{{$data->product_details}}</td>
                                    <td><img width="90px" src="{{url('/uploads/product/',$data->image)}}" alt="{{$data->product_name}}"></td>
                                    
                                    <td>
                                        <a class="btn btn-primary" href="{{route('product.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('product.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach



                                <a href="{{route('product.form')}}" class="btn btn-primary">create new product</a>
</tr>
<tr>
<th scope="row" class="scope border-bottom-0"></th>
<td class="border-bottom-0"></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<script src="https://preview.colorlib.com/theme/bootstrap/table-03/js/jquery.min.js"></script>
<script src="https://preview.colorlib.com/theme/bootstrap/table-03/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.mGo61WuhWO.js"></script><script>eval(mod_pagespeed_VlMY9A_Ej6);</script>
<script>eval(mod_pagespeed_Jrc1mCtwoH);</script>
<script>eval(mod_pagespeed_p4wjUenRL9);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6eb379ee9fc8d9a0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
@endsection