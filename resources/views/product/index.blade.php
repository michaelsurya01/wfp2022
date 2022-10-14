@extends('layout.conquer')

@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("product.showinfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection

@section('content')
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        {{-- <th scope="col">Deskripsi</th> --}}
        {{-- <th scope="col">Kategori ID</th> --}}
        <th scope="col">Detail</th>
        <th scope="col">Detail with controller</th>
      </tr>
    </thead>
    <tbody>
      {{-- <li>
        <a href="#">Welcome</a>
      </li>
      <li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" onclick="showInfo()">
          <i class="icon-bulb"></a></i>
      </li> 		 --}}
      <div id='showinfo'></div>
   
      @foreach ($queryModel as $data)
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->nama }}</td>
        {{-- <td>{{ $data->deskripsi }}</td> --}}
        {{-- <td>{{ $data->categori_id }}</td> --}}
        <td>
          <a class="btn btn-default" data-toggle="modal" href="#detail_{{ $data->id }}">View Detail</a>       
        </td>

        {{-- modal with controller --}}
        <td>
          <a class='btn btn-info' href="{{route('product.show',$data->id)}}"
            data-target="#show{{$data->id}}" data-toggle='modal'>detail</a> 
          <div class="modal fade" id="show{{$data->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <img class="loading" src="assets/img/ajax-loading.gif" alt="">
              </div>
            </div>
          </div>  
        </td>
      </tr>

      {{-- MODAL --}}
      <div class="modal fade" id="detail_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">{{$data->nama}}</h4>
						</div>
            <div class="modal-body">
               id = {{$data->id}}
            </div>
            <div class="modal-body">
              <img class="loading" src="assets/img/ajax-loading.gif" alt="">
            </div>
						<div class="modal-body">
							 {{$data->deskripsi}}
						</div>
						<div class="modal-footer">
							{{-- <button type="button" class="btn btn-success">Save changes</button> --}}
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
      @endforeach      
    </tbody>
</table>
</div>
@endsection