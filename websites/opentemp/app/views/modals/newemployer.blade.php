<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">You Are Almost There!</h4>
            </div>
            <div class="modal-body">

                <form action="search" method="post" accept-charset="utf-8">
                    <div class="form-group">

                        <select  name="temptype" class="form-control">
                            <option value="" selected="selected">Select Temp Type</option>
                            <option value="dental hygienist" >Hygienist</option>
                            <option value="dentist" >Dentist</option>
                            <option value="dental assistant" >Dental Assistant</option>
                        </select>

                    </div><!-- end username form group -->
                   <!-- <div class="form-group">
                        <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="zipcode">
                    </div>-->
                    <div class="form-group">
                        <input type="date" name="date" class="form-control" id="date" placeholder="selectdate">
                    </div>
            </div><!-- end .modal-body -->
            <div class="modal-footer">
                <input type="submit" name="submit"  class="btn btn-primary" />
            </div>
            </form>        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->