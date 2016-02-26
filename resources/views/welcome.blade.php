
@extends('pages.base')

@section('title')
    myBlog
@endsection

@section('content')
    <br><br>
<div class="row">
    <div class="col-md-7 col-md-offset-1" style="left: 50px">
    <table class="table table-hover" style="width: 90%; float: left">
        <thead>
        <tr>
            <th><h3 class="text-center">Posts</h3></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <tr>
                <td>
                    <h4>Early life and career</h4>
                    <p>Rommel was born on 15 November 1891 in Southern Germany at Heidenheim, 45 kilometres (28 mi) from Ulm, in the Kingdom of Württemberg, then part of the German Empire. He was the second of four children of Erwin Rommel Senior (1860–1913), a teacher and school administrator, and his wife Helene von Lutz, who headed the local government council. As a young man Rommel's father had been a lieutenant in the artillery. Rommel had one older sister and three younger brothers, one of whom died in infancy.</p>
                    <a href="#" data-toggle="modal" data-target="#join-modal">view more...</a>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>World War I</h4>
                    <p>During World War I, Rommel fought in France as well as in the Romanian and Italian Campaigns. He gained success leading small groups of men, using tactics such as infiltrating through enemy lines under cover of darkness, moving forward rapidly to a flanking position to arrive at their rear, and attacking defenders using the element of surprise. Arriving at the front near Verdun on 22 August 1914, Rommel initially commanded a platoon in 2nd Battalion, 124th Regiment. They were assigned to reconnaissance and courier tasks. His first combat experience was on 22 August 1914, when – catching the French garrison unprepared at the village of Bleid – he and three men engaged the enemy without waiting for the rest of their platoon to arrive. Rommel was often ill while on active duty, particularly with stomach troubles and exhaustion, a problem that manifested itself from the beginning of his career.</p>
                    <a href="">view more...</a>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Between the wars</h4>
                    <p>Rommel remained with the 124th Regiment until 1 October 1920, when he was named company commander of the 13th Infantry Regiment in Stuttgart, a post he held with the rank of captain for the next nine years. His regiment was involved in quelling riots and civil disturbances that were occurring throughout Germany at this time. Wherever possible, he avoided the use of force in these confrontations. He was assigned as an instructor at the Dresden Infantry School from 1929 to 1933, and was promoted to major in April 1932. While at Dresden, he wrote Gefechts-Aufgaben für Zug und Kompanie : Ein Handbuch für den Offizierunterricht (Combat tasks for platoon and company: A manual for the officer instruction in infantry training, published in 1934) and his book Infanterie Greift An (Infantry Attacks), a description of his wartime experiences along with his analysis, published in 1937. It became a bestseller; Adolf Hitler was one of many people who owned a copy. During this period he indulged his interest in engineering and mechanics by learning about the inner workings and maintenance of internal combustion engines and heavy machine guns. He memorized logarithm tables in his spare time, and enjoyed skiing and other outdoor sports.</p>
                    <a href="">view more...</a>
                </td>
            </tr>
        </tr>
        </tbody>
    </table>
    </div>
    <div class="col-md-3">
    <table class="table table-hover" style="float: right">
        <thead>
            <tr>
                <th><h4>Latest replies</h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <li>
                        <a href='https://en.wikipedia.org/wiki/Hermann_G%C3%B6ring'>Hermann Göring</a>
                        <span>World War I</span>
                        <p>7:15 am</p>
                    </li>

                </td>
                        {{--<div class="row cf">&ndash--}}
            </tr>
            <tr>
                <td>
                    <li data-time='06'>
                        <div>
                            <a href='https://en.wikipedia.org/wiki/Alfred_Jodl'>Alfred Jodl</a>
                            <span>Between the wars</span>
                        </div>
                        <p>6:15 pm</p>
                    </li>

                </td>
            </tr>
            <tr>
            <td>
                <a href="users" class="cta move">See All Users<i class="right yellow"></i></a>
            </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection


