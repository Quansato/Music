<div class="ms_lang_popup">
    <div id="lang_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Ngôn ngữ</h1>
                    <p>Chọn ngôn ngữ bạn muốn chuyển đổi:</p>
                    <ul class="lang_list">
                        <form action="{{route('language',['language'=>'en'])}}">
                            <li>
                                <label class="lang_check_label">
                                    English
                                    <input class="check" type="checkbox" name="en" value="en">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Tiếng việt
                                    <input class="check" type="checkbox" name="vi" value="vi">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    punjabi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    French
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    German
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Spanish
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Chinese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Japanese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Arabic
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Italian
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                        </form>
                    </ul>

                    <div class="ms_lang_btn">
                        <button type="submit" class="ms_btn ms_lang">xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Queue Clear Model ---->
<div class="ms_clear_modal">
    <div id="clear_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Bạn có muốn xoá tất cả?</h1>
                    <div class="clr_modal_btn">
                        <a href="#" class="clear_all">Xoá</a>
                        <a href="#">Huỷ bỏ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Queue Save Modal---->
<div class="ms_save_modal">
    <div id="save_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <form action="{{route('signin')}}" method="post">
                @csrf
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Đăng nhập để tiếp tục!</h1>
                        <div class="save_modal_btn">
                            <!-- <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Đăng nhập bằng google </a>/ -->
                            <a href="{{route('loginfb',['provider'=>'facebook'])}}"><i class="fa fa-facebook-square"></i> Đăng nhập bằng facebook</a>
                        </div>
                        <div class="ms_save_email">
                            <h3>Hoặc bằng tài khoản của bạn</h3>
                            <div class="save_input_group">
                                <input type="text" placeholder="Nhập email của bạn" name="email" class="form-control">
                            </div>
                            <div class="save_input_group">
                                <input type="password" placeholder="Mật khẩu" name="password" class="form-control">
                            </div>
                            <button type="submit" style="border:none" class="login ms_btn">Đăng nhập</button>
                        </div>
                        <div class="ms_dnt_have">
                            <p>Bạn chưa có tài khoản? <a href="#myModal" data-toggle="modal" class="hideCurrentModel">Đăng kí</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="success_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Thêm bài hát thành công</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="error_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Bài hát đã tồn tại trong danh sách</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="delete_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Xoá thành công</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="ms_clear_modal">
    <div id="success_signin" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Đăng kí tài khoản thành công</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="success_update" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Cập nhật thành công</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="ms_clear_modal">
    <div id="err_login" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Tài khoản hoặc mật khẩu không chính xác</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="notice" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Tính năng này đang được phát triển</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ms_clear_modal">
    <div id="err_update" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Chưa đủ 60 ngày để cập nhật</h1>
                </div>
            </div>
        </div>
    </div>
</div>

