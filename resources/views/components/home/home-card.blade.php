<div class="card" style = "height:275px">
    <div class="card-header bg-dark text-light">
        <div class="d-flex justify-content-between">
            <div class="profile-info">
                <a href="#" class = "text-light text-decoration-none"> <img src="{{ $user_image }}" alt="" class = "rounded-circle" height = "20px" width = "20px"><span class = "ms-2">{{ $user_name }}</span></a> 
            </div>
            <div class="post-info">
                <span class = "badge bg-primary">{{ $card_type }}</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <img src="{{ $image }}" alt="" class = "rounded" height = "200px" width = "180px">
            </div>
            <div class="col-8">
                <div class="d-flex flex-column" style="height:13.5rem">
                    <div>
                        <h4 class="card-title">{{ $title }}</h4>
                        <div>
                            <span class = "badge bg-info me-2">{{ $type }}</span><span class = "badge bg-warning">{{ $author }}</span>
                        </div>
                        <p class="card-text mt-1">{{ $description }}</p>
                    </div>
                    <div class="mt-auto">
                        <hr>
                        <p><small>2 days ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>