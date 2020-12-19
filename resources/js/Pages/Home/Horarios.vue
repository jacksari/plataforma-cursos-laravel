<template>
    <app-layout>

        <div class="grid grid-cols-1 bg-gray-200 shadow-lg p-10">
            <div class="bg-white rounded-lg">
                <Schedule
                    :time-ground="['08:00', '13:00']"
                    :week-ground="['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes','Sábado','Domingo']"
                    :color="['#2B2E4A','#521262','#903749','#53354A','#40514E','#537780','#537780','#6c96e5','#ab836f']"
                    :task-detail="[
				[
					{
						dateStart: '09:30',
						dateEnd: '10:30',
						title: 'Inglés',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},

				],
				[
					{
						dateStart: '09:30',
						dateEnd: '10:30',
						title: 'Inglés',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},

				],
				[
					{
						dateStart: '09:30',
						dateEnd: '10:30',
						title: 'Inglés',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},
					{
						dateStart: '10:30',
						dateEnd: '12:00',
						title: 'Matemática',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},

				],
				[
					{
						dateStart: '08:00',
						dateEnd: '10:00',
						title: 'Física',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},
					{
						dateStart: '10:00',
						dateEnd: '12:00',
						title: 'Biología',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},
					{
						dateStart: '12:00',
						dateEnd: '13:00',
						title: 'Psicología',
						detail: 'Metting (German: Mettingen) is a commune in the Moselle department in Grand Est in north-eastern France.'
					},

				]
			]">

                </Schedule>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {AppLayout},
    data() {
        return {
        }
    }

}
</script>
