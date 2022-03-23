@extends('layouts.main')

@section('container')
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark mt-5 shadow-sm">
    <div class="row">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">ASPIRASI MASYARAKAT</h1>
            <p class="lead my-3">Sampaikan aspirasi anda langsung ke pemerintahan</p>
            <a href="#form" class="btn btn-secondary btn-lg">Tulis</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <img src="/img/test.png" style="max-width: 300px">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">

    <div class="col-md-3">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 rounded bg-white shadow-sm">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your
                    publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>

            <div class="p-4">
                <div class="alert alert-success mx-auto mt-4" role="alert">
                    Berhasil
                </div>
            </div>
            <div class="p-4">
                <div class="alert alert-danger mx-auto mt-4" role="alert">
                    Gagal
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            From the Firehose
        </h3>
        <article class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <hr>
        </article>

        <div class="card shadow-sm" style="margin-top: 3rem; margin-bottom: 5rem">
            <div class="card-body">
                <h1 class="text-center">Formulir Aspirasi</h1>
                <hr>
                <form action="/aspirasi/create" method="post" id="form">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="id_kategori">
                            <option value="1">Jakarta</option>
                            <option value="2">Bandung</option>
                            <option value="3">Bogor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
