
@extends('welcome')
@section('content')
<center>
<button type="button" class="btn btn-primary fw-bold fs-8 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Record
  </button>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
            <form action="insertdata" method="POST" enctyp="mutipart/from-data">
                    @csrf
                     <div class="mb-2">
                             <input type="text" placeholder="Enter Product Name"  class="form-control" name="pname" id="">
                    </div>
                     <div class="mb-2">
                             <input type="text" placeholder="Enter Product price"  class="form-control" name="pprice" id="">
                    </div>
                     {{-- <div class="mb-2">
                             <input type="file"   class="form-control" name="image" id="">
                    </div> --}}

                    <button type="submit"  class="btn btn-primary fw-bold fs-8 rounded-pill">Add record</button>
            </form> 
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                      </div>
                   
        </div>
        
      </div>
    </div>
</div>
</center>
<div class="container">
<table class="table mt-4">
    <thead class="bg-info text-black fw-bold">
      <th > Product Id</th>
      <th>Product name</th>
      <th>Product price</th>
    </thead>
     <tbody>
         @foreach($data as $item)
        <tr>
              <td>$item{{['Id']}}</td>
              <td>$item{{['pname']}}</td>
              <td>$item{{['pprice']}}</td>
        </tr>  
    </tbody> 
    @endforeach 
</table> 
</div>
  @endsection