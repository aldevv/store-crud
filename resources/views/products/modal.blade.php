<!-- Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $type }}">{{ $buttonName }}</button>
<form action="{{ $func }}" method="post">
    <div class="modal fade" id="modal-{{ $type }}" tabindex="-1" aria-labelledby="label-{{ $id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="label-{{ $id }}">{{ $type }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ $id }}</p>
                    <input type="text" class="form-control" name="id" value="{{ $id }}"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    <!-- name -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" >name</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <!-- price -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text">price</span>
                        <input type="text" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
