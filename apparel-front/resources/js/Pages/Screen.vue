<script setup>
import ScreenLayoutLayout from '@/Layouts/ScreenLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    data: Object
})

</script>
<script>
Echo.channel("first-floor").listen("RealTimeMessage", (e) =>
    console.log("RealTimeMessage: " + e.message)
);
</script>

<template>
    <Head title="Welcome" />
    <ScreenLayoutLayout>
        <table class="w-full table-auto border-collapse border border-slate-400">
            <thead>
                <tr>
                    <th class="border border-slate-300">Machine Name</th>
                    <th class="border border-slate-300">Total Item</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in data">
                    <td class="border border-slate-300 text-center">{{ item.machine_type.machine_type_name }}</td>
                    <td class="border border-slate-300 text-center">{{ item.item_number }}</td>
                </tr>
            </tbody>
        </table>
        <!-- <table class="w-full table-auto border-collapse border border-slate-400">
            <thead>
                <tr>
                    <th class="border border-slate-300">Line</th>
                    <th class="border border-slate-300">Sewing Machine</th>
                    <th class="border border-slate-300">Item</th>
                    <th class="border border-slate-300">8:00 - 9:00</th>
                    <th class="border border-slate-300">9:00 - 10:00</th>
                    <th class="border border-slate-300">10:00 - 11:00</th>
                    <th class="border border-slate-300">11:00 - 12:00</th>
                    <th class="border border-slate-300">12:00 - 13:00</th>
                    <th class="border border-slate-300">13:00 - 14:00</th>
                    <th class="border border-slate-300">14:00 - 15:00</th>
                    <th class="border border-slate-300">15:00 - 16:00</th>
                    <th class="border border-slate-300">16:00 - 17:00</th>
                    <th class="border border-slate-300">17:00 - 18:00</th>
                    <th class="border border-slate-300">Total</th>
                    <th class="border border-slate-300">Achievement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-300">Line 01</td>
                    <td class="border border-slate-300">Collar Sewing</td>
                    <td class="border border-slate-300">Koclar</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">15</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">20</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">17</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">130</td>
                    <td class="border border-slate-300">12%</td>
                </tr>
                <tr>
                    <td class="border border-slate-300">Line 02</td>
                    <td class="border border-slate-300">Button Sewing</td>
                    <td class="border border-slate-300">Button</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">15</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">20</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">17</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">130</td>
                    <td class="border border-slate-300">12%</td>
                </tr>
                <tr>
                    <td class="border border-slate-300">Line 03</td>
                    <td class="border border-slate-300">Chest Sewing</td>
                    <td class="border border-slate-300">Chest</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">15</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">20</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">10</td>
                    <td class="border border-slate-300">17</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">18</td>
                    <td class="border border-slate-300">14</td>
                    <td class="border border-slate-300">130</td>
                    <td class="border border-slate-300">12%</td>
                </tr>
            </tbody>
        </table> -->
    </ScreenLayoutLayout>
</template>

<style>

</style>
