<div class="intro">
    <div class="intro__text">
        <h2><?= $message ?? ''; ?></h2>
    </div>
</div>


<style>
    body {
        height: 100%;
        overflow: hidden;
    }
    .intro {
        align-items: center;
        display: flex;
        flex-direction: column;
        color: black;
    }
    h2 {
        font-size: 48px;
        text-align: center;
    }
</style>
