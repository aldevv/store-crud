<!-- Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $type }}">{{ $buttonName }}</button>
<form action="{{ route($func) }}" method="post">
    @csrf
    <div class="modal fade" id="modal-{{ $type }}" tabindex="-1" aria-labelledby="label-{{ $id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="label-{{ $id }}">{{ $type }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal-{{ $type }}" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" name="id" value="{{ $id }}" style="display:none;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                    @if( $buttonName == 'Update')
                        <!-- name -->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">name</span>
                            <input type="text" class="form-control" name="Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    @else
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">Are you sure you want to delete the client with id {{ $id }}?</span>
                        </div>
                @endif
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
