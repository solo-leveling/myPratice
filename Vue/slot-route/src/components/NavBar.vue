<template>
<div>
    <p>{{title}}</p>
    <div>
        <slot name="content"></slot>
    </div>
    <div>
        <slot name="footer"></slot>
    </div>
</div>
</template>

<script>

export default {
    props:['title']
}
</script>

<style>

</style>