<div>
    <div class="container cont-anuncio">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input wire:model="anuncio.titulo" class="form-control relieve" id="comment"
                        placeholder="Titulo del anuncio" name="text">
                    @error('anuncio.titulo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br>
                    <textarea wire:model="anuncio.contenido" class="relieve" placeholder="Especificaciones del anuncio"></textarea> <br>
                    @error('anuncio.contenido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <input wire:model="url_img" type="file" id="imagen" class="form-control" name="file">Subir Imagen <i
                            class="fa fa-upload" aria-hidden="true"></i>
                        @error('url_img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @if ($url_img != null)
                            <img class="border-radius: 25px; mx-auto d-block "
                                style="border-radius: 25px; width: 290px; height: 250px;"
                                src="{{ $url_img->temporaryUrl() }}" alt="">
                        @endif
                    </div>
                </div><br>

                <div class="row align-items-center">
                    <div class="col-sm">
                        <div class="form-group">
                            <a href="{{ route('admin.anuncios') }}" type="button"
                                class="float-left btn btn-dark">Registros</a>
                            <button wire:loading.attr="disabled" wire:target="url_img"
                                class="float-right btn btn-success"><i class="fa fa-save"></i>
                                Publicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        jQuery('input[type=file]').change(function() {
            var filename = jQuery(this).val().split('\\').pop();
            var idname = jQuery(this).attr('id');
            console.log(jQuery(this));
            console.log(filename);
            console.log(idname);
            jQuery('span.' + idname).next().find('span').html(filename);
        });
    </script>
</div>
