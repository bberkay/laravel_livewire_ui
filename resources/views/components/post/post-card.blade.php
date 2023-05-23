<div class="card" style = "height:275px">
    <div class="card-header bg-dark text-light">
        <div class="d-flex justify-content-between">
            <div class="profile-info">
                <!-- Name -->
                <a href="#" class = "text-light text-decoration-none"><span class = "ms-2">{{ $format($name) }}</span></a> 
            </div>
            <div class="post-info">
                <!-- Post Type -->
                <span class = "badge bg-primary">{{ $format($cardType) }}</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <!-- Post Image -->
                <img src="{{ $image }}" alt="" class = "rounded" height = "200px" width = "180px">
            </div>
            <div class="col-8">
                <div class="d-flex flex-column" style="height:13.5rem">
                    <div>
                        <!-- Post Title -->
                        <h4 class="card-title">{{ $title }}</h4>
                        <div>
                            <!-- Post Type and Author -->
                            <span class = "badge bg-info me-2">{{ $type }}</span><span class = "badge bg-warning">{{ $author }}</span>
                        </div>
                        <!-- Post Description -->
                        <p class="card-text mt-1">{{ $description }}</p>
                    </div>
                    <div class="mt-auto pb-3">
                        <hr>
                        <!-- Post Date -->
                        <small class="text-muted"> {{ $date }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>