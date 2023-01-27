<template>
    <transition>
        <transition name="modal-animation">
            <div v-show="modalActive">
                <transition name="modal-animation-inner">
                    <div v-show="modalActive" class="modal-inner">
                        <i class="fa-light fa-circle-xmark"></i>
                         <!-- Modal content -->
                         <slot />
                         <button>close</button>
                    </div>
                </transition>
            </div>
        </transition>
    </transition>
</template>

<script>
export default {
    props:["modalActive"],
};
</script>

<style>

</style>
