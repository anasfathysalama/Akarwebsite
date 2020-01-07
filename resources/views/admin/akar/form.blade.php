
    {{ csrf_field() }}


        <div class="form-group">
            <div class="col-md-12">
             <input type="text"   name="name" class="form-control" placeholder="اسم العقار" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text"  name="price" class="form-control"  placeholder="ادخل السعر"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text"  name="type" class="form-control" placeholder=" نوع العقار " />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text"  name="squer" class="form-control" placeholder="مساحة العقار" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text"  name="bu_type" class="form-control"  placeholder="حالة العقار"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <textarea class="form-control"  name="description" placeholder="وصف العقار" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <input type="file" class="form-control-file"  name="image">
          </div>
        </div>



    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-warning">

              تنفيذ العملية
           </button>
        </div>
    </div>
