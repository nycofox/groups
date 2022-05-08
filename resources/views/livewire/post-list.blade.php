<div>
    @foreach($posts as $post)
        <div class="mb-4">
            @include('posts.post_card')
        </div>
    @endforeach

    <div
        x-data="{
        observe () {
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        @this.call('loadMore')
                    }
                })
            }, {
                root: null
            })

            observer.observe(this.$el)
        }
    }"
        x-init="observe"
    ></div>
</div>
