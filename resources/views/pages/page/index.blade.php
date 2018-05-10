@extends('layouts.default')

@section('title')
    @lang('title.pages')
@endsection

@section('content')
    <h1>@lang('title.pages')</h1>
    @include('components.alerts')

    @if( empty($pages))
        <p>@lang('phrase.no-items-found', ['item' => __('title.pages')])</p>
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>@lang('title.title')</th>
                <th>@lang('title.updated')</th>
                @can('update', Zeropingheroes\Lanager\Page::class)
                    <th>@lang('title.published')</th>
                @endcan
                <th>
                    @can('update', Zeropingheroes\Lanager\Page::class)
                        <span class="oi oi-cog" title="Cog" aria-hidden="true"></span>
                    @endcan
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>
                        <a href="{{ route('pages.show', ['id' => $page->id]) }}">{{ $page->title }}</a>
                    </td>
                    <td>
                        @include('components.time-relative', ['datetime' => $page->updated_at])
                    </td>
                    @can('update', Zeropingheroes\Lanager\Page::class)
                        <td>@include('components.tick-cross', ['value' => $page->published])</td>
                    @endcan
                    <td>
                        @can('update', Zeropingheroes\Lanager\Page::class)
                            @include('components.buttons.edit', ['route' => route('pages.edit', $page->id)])
                        @endcan
                        @can('delete', Zeropingheroes\Lanager\Page::class)
                            @include('components.buttons.delete', ['route' => route('pages.destroy', $page->id)])
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection