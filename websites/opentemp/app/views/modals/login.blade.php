<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{ Form::open(array('url' => 'user')) }}
                    @if($errors->any())
                        <div class="alert alert-error">
                            <a class="close" href="#" data-dismiss="alert">&times;</a>
                            {{ implode('',$errors->all('<li class="error">:message</li>') )}}
                        </div>
                    @endif
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Log In</h4>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        {{ Form::text('email', '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'email')) }}
                    </div><!-- end username form group -->
                    <div class="form-group">
                        {{ Form::text('password', '', array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'password')) }}
                    </div><!-- end password form group -->
                    <div id="temp-login-remember">
                        <input id="templgn-remember" type="checkbox" name="remember" class="inputbox" value="yes">
                        <label for="templgn-remember">Remember Me</label>
                        <div class="col-md-2 pull-right">
                            {{Form::submit('Sign In', array('class' => 'btn btn-default left-right'))}}
                            {{HTML::link('user/new', 'Register', array('class' => 'btn btn-primary left-right') )}}
                        </div>
                    </div>
                {{Form::close()}}
            </div>
            <div class="modal-footer">
                <div class="pull-left">
                    <a class="darklink" href="/"> Forgot your password</a>
                    <a class="darklink" href="/"> Forgot your username?</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
