{{-- <div class="aa-search-box">
	<form action="{!! route('getTimkiem') !!}" method="POST">
    	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	  	<input type="text" name="txtSeach" id="txtseach" placeholder="Tìm kiếm...">
	  	<button type="submit"><span class="fa fa-search"></span></button>
	</form>
</div> --}}
<div class="search-icon"><em class="mdi mdi-magnify"></em></div>
<div class="search-wrapper">
  <div class="searchbox">
		<form action="{!! route('getTimkiem') !!}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<input type="text" name="txtSeach" id="txtseach" placeholder="Bạn tìm sản phẩm gì hôm nay?">
			<button type="submit"><em class="mdi mdi-magnify"></em></button>
	</form>
  </div>
</div>