<div class="container">
      <div style="float: left">
        <span style="font-weight: bold;font-size: 35px">MyPage</span>
      </div>
      <form action="{{ URL::to('searchProduct')}}" method="post" style="margin-top: 10px;">

        <div class="input-group" style="float: left;margin-left: 20px">
          <input type="search" class="form-control" placeholder="Search Product" aria-describedby="basic-addon2" style="width: 685px">
        </div>
          <select name="category"  class="form-control" style="width: 200px;float: left">
            <option value="">All Category</option>
            <option value="mobiles">Mobiles</option>
            <option value="laptops">Laptops</option>
            <option value="books">Books</option>
            <option value="cars">Cars</option>
            <option value="bikes">Bikes</option>
          </select>
          <input type="submit" name="submit" value="Search" class="form-control" style="width: 100px">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
 </div>
 <br><br>