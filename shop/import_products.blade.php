@extends("layouts.app")
@section("content")
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>ИМПОРТ ТОВАРОВ</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper sm-top">
        <div class="contact-page-content">
            <div class="contact-info-wrapper">
                <div class="container">
                    <div class="row text-center ">
                        <div class="col-md-12 mb-100">
                        <h2>Импорт товаров из JSON или XML</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="mb-100" action="{{route('shop.upload_file')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="Load_data" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Выбрать файл...</label>

                                    @if(isset($request))
                                        @dd($request)
                                        <p>{{$error}}</p>
                                    @endif
                                </div>

                                <button class="btn btn-brand waves-effect waves-light" role="submit" aria-pressed="true">Отправить</button>
                            </form>
                            <script>
                                // Add the following code if you want the name of the file appear on select
                                jQuery("#validatedCustomFile").on("change", function() {
                                    var fileName = jQuery(this).val().split("\\").pop();

                                    jQuery(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
