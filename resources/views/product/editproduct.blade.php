@extends('layout.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.bubble.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
@section('body')
<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add product</h4>
                </div>
                <form method="post" action="{{route('product.update',[$productArr->id])}}">
                    @csrf
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Product Name</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email" name="name" value="{{$productArr->name}}">
                                    </fieldset>
                                </div>

                                <section class="snow-editor">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Product Details</h4>
                                                </div>
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <p>Describe your product</p>
                                                        <div class="row"><textarea id="description" name="description" rows="4" cols="140">
{{$productArr->description}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="row" data-select2-id="128">
                                    <div class="col-12" data-select2-id="127">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">General Information of product</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-sm-6 col-12" data-select2-id="126">
                                                            <div class="text-bold-600 font-medium-2">
                                                                Category
                                                            </div>
                                                            <div class="form-group" data-select2-id="125">
                                                                <select class="form-control" id="category" name="category">
                                                                <option selected>Select category</option>

</select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12" id="subcat_id_div">
                                                            <div class="text-bold-600 font-medium-2">
                                                                Sub category </div>
                                                            <div class="form-group" data-select2-id="125">
                    <select class="form-control" name="subcategory" id="subcategory">
                           <option value="-1">-Select subcategory-</option>
                              </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12" id="subcat_id_div">
                                                            <div class="text-bold-600 font-medium-2">
                                                                Sub Sub category </div>
                                                            <div class="form-group" data-select2-id="125">
                    <select class="form-control" name="subsubcategory" id="subsubcategory">
                           <option value="-1">-Select sub subcategory-</option>
                              </select>
                                                            </div>
                                                        </div>
                                                        </div>




                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title"> Product Price and stock</h4>
                                                        </div>
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                        <fieldset class="form-group">
                                                                            <label for="basicInput">Unit price</label>
                                                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter email" name="price" value="{{$productArr->price}}">
                                                                        </fieldset>
                                                                    </div>



                                                                    <div class="col-xl-12 col-md-6 col-12 mb-12">
                                                                        <fieldset class="form-group">
                                                                            <label for="basicInput">Total stock</label>
                                                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter email" name="stock" value="{{$productArr->stock}}">
                                                                        </fieldset>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <h4>UPLOAD IMAGES</h4>
                                                        <div class="form-label-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="signature" name="signature">
                                                                <label class="custom-file-label" for="signature">Photo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light float-lg-right">Edit product</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    </div>
    </div>

</section>

<script>
var myObj = {
  init: function () {
    var that = this;
    this.load_category();
    document.getElementById("category").addEventListener("change", function () {
      that.load_subcategory(this.value);
    });
    document.getElementById("subcategory").addEventListener("change", function () {
      that.load_subsubcategory(this.value);
    });
  },
  load_category: function () {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/categories", true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("category").appendChild(op);
      });
    };
    xhr.send();
  },
  load_subcategory: function (id) {
    document.getElementById("subcategory").innerHTML='';
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/subcategories/" + id, true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("subcategory").appendChild(op);
      });
    };
    xhr.send();
  },
  load_subsubcategory: function(id)
  {
    document.getElementById("subsubcategory").innerHTML='';
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/categorieswithsubcat" + id, true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("subsubcategory").appendChild(op);
      });
    };
    xhr.send();
  }
}
myObj.init();

</script>
@section('js')
<script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="../../../app-assets/js/scripts/editors/editor-quill.js"></script>
<script src="../../../app-assets/js/scripts/extensions/dropzone.js"></script>
<script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>

@stop
@endsection()
