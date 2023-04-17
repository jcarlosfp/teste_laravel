
<tbody>
@foreach($this->clientes as $cliente)
<tr>
    <td>
        <h2 class="table-avatar">
            <a href="general.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{!! $cliente->sexo == 'Feminino' ? asset('assets/img/profiles/avatar_feminino.jpg') : asset('assets/img/profiles/avatar_masculino.jpg') !!}" alt="User Image"></a>
            <a href="{!! route('clientes') !!}/{{$cliente->id}}">{!!$cliente->nome!!}</a>
        </h2>
    </td>
    <td>{!!$cliente->cpf!!}</td>
    <td>{!!$cliente->data_nasc!!}</td>
    <td>{!!$cliente->estado!!}</td>
    <td>{!!$cliente->cidade!!}</td>
    <td>{!!$cliente->sexo!!}</td>
    <td class="text-end">
        <div class="actions">
            <a href="{!! route('clientes') !!}/{{$cliente->id}}" class="btn btn-sm bg-success-light me-2">
            <i class="fe fe-pencil"></i>
            </a>
            <a href="#" onclick="confirm('Tem certeza que deseja excluir o cliente:\r {{$cliente->nome}}?') || event.stopImmediatePropagation()" wire:click.prevent="delete({{ $cliente->id }})" class="btn btn-sm bg-danger-light">
            <i class="fe fe-trash"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach
</tbody>