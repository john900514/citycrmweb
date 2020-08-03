import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);


const widgetsModule = {
    state: {
        widgets: {},
        widgetsErrorMsg: ''
    },
    mutations: {
        updateWidgetsObj(state, widgets) {
            console.log('updating Widgets Object to ', widgets);
            state.widgets = widgets;
        },
        widgetsErrorMsg(state, msg) {
            state.widgetsErrorMsg = msg;
        }
    },
    getters: {
        getWidgets (state, getters, rootState) {
            return state.widgets;
        },
        getWidgetsErrorMsg (state, getters, rootState) {
            return state.widgetsErrorMsg;
        }
    },
    actions: {
        getAvailableWidgets(context, args) {
            axios.get(`${args['type']}/widgets`)
                .then(res => {
                    console.log('Widgets call response - ', res);
                    if('data' in res) {
                        let data = res.data;

                        if('success' in data) {
                            if(data['success']) {
                                context.commit('updateWidgetsObj', data['widgets']);
                            }
                            else {
                                context.commit('widgetsErrorMsg', data['reason']);
                            }
                        }
                        else {
                            // unknown response
                        }

                    }
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
};

export default widgetsModule;
