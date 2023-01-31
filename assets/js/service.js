    async function getData(url){
        const res =await axios.get(url).then(res=>res).catch(err=>err.response)
        if(res.status != 200){
            toastr["error"](res.data.data);
            throw Error(res.data.data)
        }
        return res.data.data
    }

    async function postData(url,data){
        const res = await axios.post(url,data).then(res=>res).catch(err=>err.response)
        if(res.status != 200){
            toastr["error"](res.data.data);
            throw Error(res.data.data)
        }
        return res.data.data
    }

    async function updateData(url,data){
        const res = await axios.put(url,data).then(res=>res).catch(err=>err.response)
        if(res.status != 200){
            toastr["error"](res.data.data);
            throw Error(res.data.data)
        }
        return res.data.data
    }

    async function deleteData(url){
        const res = await axios.delete(url).then(res=>res).catch(err=>err.response)
        if(res.status != 200){
            toastr["error"](res.data.data);
        }
        return res.data.data
    }
