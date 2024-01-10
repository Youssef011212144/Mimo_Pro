<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
   @include('admin.siderbar')
      <!-- partial -->
      @include('admin.navbar')-->
        <!-- partial -->
     <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <table>
                <tr>
                    <td style="padding:20px">title</td>
                    <td style="padding:20px">description</td>
                    <td style="padding:20px">quantity</td>
                    <td style="padding:20px">price</td>
                    <td style="padding:20px">img</td>
                </tr>
                @foreach ($data = $data->reverse() as $products)
                    
          
                <tr style="background-color:#434a5488;align-item=center">
                    <td style="padding:20px">{{  $products->title}}</td>
                    <td style="padding:20px">{{  $products->description}}</td>
                    <td style="padding:20px">{{  $products->price}}</td>
                    <td style="padding:20px">{{  $products->quantity}}</td>
                    <td style="padding:20px"><img src="productimage/{{  $products->image}}" 
                        height="100px" width="100px"> </td>
                </tr>
                @endforeach
            </table>
        </div></div>
          <!-- partial -->
       @include('admin.js')
  </body>
</html> 