<div class="row">
    <div class="col-md-6">
       <div class="form-group">
        <label>Estado</label>
          <select wire:model="estado" name="estado" class="select form-select">
             <option value="" selected>{{ __('Selecione o estado')}}</option>
             @foreach($this->estados as $estado)
                <option value="{{$estado->sigla}}">{{$estado->nome}}</option>
            @endforeach
          </select>
          @error('estado') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
       </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Cidade</label>
           <select wire:model="municipio" name="cidade" class="select form-select select-cidades">
              <option value="" selected>{{ __('Selecione a cidade')}}</option>
              @if($this->estado)
                    @foreach($this->municipios as $municipio)
                        <option value="{{$municipio->nome}}">{{$municipio->nome}}</option>
                    @endforeach
                @endif
           </select>
           @error('cidade') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
        </div>
     </div>
 </div>