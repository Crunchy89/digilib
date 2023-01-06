    async function getData(url){
        const res = await axios.get(url).then(res=>res.data).catch(err=>err.response)
        if(res.code !== 200){
            console.log(res.data)
            const err= Error(`${res.code}: ${res.message}`)
            throw err
        }
        return res.data
    }

    async function postData(url,data){
        const res = await axios.post(url,data).then(res=>res.data).catch(err=>err.response)
        if(res.code !== 200){
            console.log(res.data)
            const err= Error(`${res.code}: ${res.message}`)
            throw err
        }
        return res.data
    }

    async function updateData(url,data){
        const res = await axios.put(url,data).then(res=>res.data).catch(err=>err.response)
        if(res.code !== 200){
            console.log(res.data)
            const err= Error(`${res.code}: ${res.message}`)
            throw err
        }
        return res.data
    }

    async function deleteData(url){
        const res = await axios.delete(url).then(res=>res.data).catch(err=>err.response)
        if(res.code !== 200){
            console.log(res.data)
            const err= Error(`${res.code}: ${res.message}`)
            throw err
        }
        return res.data
    }
